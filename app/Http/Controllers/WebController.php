<?php
namespace App\Http\Controllers;

use App\Book;
use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class WebController extends Controller
{

    public function index(){
        $books = Book::all();
        return view("home", [
            "books"=>$books,
        ]);
    }
    public function search(\Illuminate\Http\Request $request)
    {
        $book1 = Book::where("title", $request->bookname)->get();
        return view("search", [
            "book1"=>$book1,
        ]);
    }
    public function newBrand(){
        return view("book.new");
    }
    public function saveBrand(Request $request){
        $request->validate([
            "title"=>"required|string|min:2|"
        ]);
        try {
            DB::table("books")->insert([
                "title"=>$request->get("title"),
                "ISBN"=>$request->get("ISBN"),
                "pub_year"=>$request->get("pubyear"),
                "created_at"=> Carbon::now(),
                "updated_at"=> Carbon::now(),
            ]);
        }catch (\Exception $exception){
            return redirect()->back();//back() trở lại trang trước, ở đây là trang form
        }
        return redirect()->to("/admin/list-brand");
    }

}
