<?php
namespace App\Controllers;
use App\Models\LibrariesModel;
use App\Models\WishlistModel;
use CodeIgniter\Controller;

class Libraries extends Controller{
  public function userlibrary($user_id){
    $librarymodel = new LibrariesModel();
    if(is_array($librarymodel->getUserLibrary($user_id))){
      $data['library'] = $librarymodel->getUserLibrary($user_id);
    } else {
      $data['error'] = "You don't have games on your library. Add some games!";
    }
    return view('libraries/userlibrary', $data);
  }
  public function isinlibrary($id){
    $librarymodel = new LibrariesModel();
    if($librarymodel->checkGameLibrary($id, session('user_id')) == true){
      $data['library'] = true;
    }else{
      $data['library'] = false;
    }
    return view('libraries/librarybutton', $data);
  }
  public function addtouserlibrary($id){
    $librarymodel = new LibrariesModel();
    $whislistmodel = new WishlistModel();
    if($whislistmodel->checkGameWishlist($id, session('user_id')) == true){
      $whislistmodel->deleteFromWishlist($id);
      $librarymodel->addToUserLibrary($id, session('user_id'));
    } else {
      $librarymodel->addToUserLibrary($id, session('user_id'));
    }
    return redirect()->back();
  }
}

?>
