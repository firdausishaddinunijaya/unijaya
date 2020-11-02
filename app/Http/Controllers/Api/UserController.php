<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserTransformer;
use App\Imports\DeleteUsersImport;
use App\Imports\UsersImport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Validator;
use DB;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public $fieldSearchable = [
        'email', 'name'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'start' => 'required',
            'length' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ]);
        }

        Paginator::currentPageResolver(function () use ($input) {
            return ($input['start'] / $input['length'] + 1);
        });

        $model = new User();

        if (!empty($input['search'])) {
            foreach ($this->fieldSearchable as $column) {
                $model = $model->whereLike($column, $input['search']);
            }
        }

        // $users = $model->paginate($input['length']);
        $users = $model->paginate($input['length']);

        $users = UserTransformer::collection($users);

        return response()->json([
            'success' => true,
            'message' => 'Successfully Retrieved Users.',
            'data' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($request->password);

        DB::beginTransaction();
        try {
            if (!$user = User::create($input)) throw new Exception("Error Processing Request", 1);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Successfully Created A User.',
                'data' => $user
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response()->json([
            'success' => true,
            'message' => 'Successfully Retrieved A User.',
            'data' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $input = $request->all();
        $input['password'] = bcrypt($request->password);

        DB::beginTransaction();
        try {
            if (!$user->update($input)) throw new Exception("Error Processing Request", 1);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Successfully Deleted A User.',
                'data' => $user
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        DB::beginTransaction();
        try {
            if (!$user->delete()) throw new Exception("Error Processing Request", 1);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Successfully Deleted A User.'
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function importUpdateOrCreate(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'file' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ]);
        }

        DB::beginTransaction();
        try {
           if(!Excel::import(new UsersImport, $request->file('file'))) throw new Exception("Error Processing Request", 1);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'File Uploaded'
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function importDelete(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'file' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ]);
        }

        DB::beginTransaction();
        try {
            if(!Excel::import(new DeleteUsersImport, $request->file('file'))) throw new Exception("Error Processing Request", 1);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'File Uploaded'
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
