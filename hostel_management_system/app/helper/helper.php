<?php
//upload Image function
function uploadImage($request,$object,$filename)
{
    if($request->hasFile($filename)){
        $file = $request->$filename;
        $newName =time () . '.' . $file->getClientOriginalExtension();
        $file->move('photos',$newName);
        $object->$filename = "photos/$newName";
    }
}
