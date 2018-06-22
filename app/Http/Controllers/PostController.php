<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\ValidationException;
use Exception;
use App\Http\Requests\StoreBlogPost;
class PostController extends Controller
{
    public function index(Request $request)
    {   
        // return ['123','456'];
        // $users = DB::select('select * from posts');
        // $user = DB::select('select * from post where status = ?', [10]); //这样是有占位符的 比较安全 参数绑定可以避免 SQL 注入攻击
        // $user = DB::select('select * from post where status = :status', ['status' => 1]);
        // dd($users);
        $pagesize = $request->input('pagesize');
        $pagenum = $request->input('pagenum');
        $num = ($pagenum - 1) * $pagesize;
        $articlesList = DB::table('articles')->offset($num)->limit($pagesize)->get(); // get 方法获取表中所有记录
        $count = DB::table('articles')->count();
        return ['list' => $articlesList, 'count' => $count];
    }
    public function show()
    {
        // return $post;
        return response()->json($exception->errors(), $exception->status);
    }
    public function demo() 
    {
        // echo 456;
        $users = DB::select('select * from posts');
        $users = DB::table('posts')->get(); 
        dd($users);
        return $users;
    }
    /**
     * 获取已定义的验证规则的错误消息。
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => '不能为空',
            'body.required'  => '不能为空',
            'name.required' => '不能为空', 
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     * 测试验证规则 获取应用于请求的验证规则。
     *
     * @return array
     */
    public function verify(StoreBlogPost $request)
    {    
        return response()->json([
            'success' => true,
            'status' => 200,
            'msg' => 'ok'
        ]);
    }
    public function about( )
    {
//        Request::
        return ['a', 4, 9, 0];
        return response()->json($exception->errors(), $exception->status);
    }
    /**
     * 注册用户
     *
     * @return array
     */
    public function register(Request $request)
    {
        
        
        // return response()->json([
        //     'success' => true,
        //     'status' => 200,
        //     'msg' => 'user created!'
        // ]);
        // $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        return response()->json([
            'success' => true,
            'status' => 200,
            'msg' => 'user created!'
        ]);
    }
    /**
     * 注册用户
     *
     * @return array
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    
}