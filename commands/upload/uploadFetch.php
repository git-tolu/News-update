<?php
require_once "../models/apiget.php";
require_once "../models/session.php";

$dbc = new Dbc();

if (($_SERVER['REQUEST_METHOD']) === 'GET') {
    $fetch = $dbc->UploadAll($cid);
    echo json_encode([
        'data' => $fetch,
        // 'status' => 200
    ]);
    // echo $fetch;
    // $fetch = json_decode($fetch);

    // $sn = 1;
    // $upload = "";
    // foreach ($fetch as $product) {
    //     if ($dbc->imageValidation($product['coverimage']) === true) {
    //         $media = '<img src="../commands/uploadMedia/' . $product['coverimage'] . '" style=" background-size: cover; object-fit: cover; background-position: center; height: 150px; width: 150px;" alt="blog">';
    //     } else {
    //         if ($dbc->videoValidation($product['coverimage']) === true) {
    //             $media = ' <video src="../commands/uploadMedia/' . $product['coverimage'] . '" style=" background-size: cover; object-fit: cover; background-position: center; height: 100px !important; width: 150px;" controls></video> ';
    //         } else {
    //             echo  json_encode([
    //                 "message" => "something went wrong",
    //             ]);
    //         }
    //     }

    //     $upload .= '
    //         <tr>
    //             <td>' . $sn++ . '</td>
    //             <td>' . $product['title'] . '</td>
    //             <td>' . $product['author'] . '</td>
    //             <td>' . $product['datecreated'] . '</td>
    //             <td>' . $product['category'] . '</td>
    //             <td>' . $media . '</td>
    //             <td>' .  date('F j, Y', strtotime($product['content']))  . '</td>
    //             <td>
    //                 <!-- Edit modal btn -->
    //                 <button type="button" id="' . $product['id'] . '" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#editModal">
    //                     <i class="fa fa-pencil" aria-hidden="true"></i> 
    //                 </button>
    //                 <!-- view modal btn -->
    //                 <button type="button" id="' . $product['id'] . '" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#viewModal">
    //                     <i class="fa fa-eye" aria-hidden="true"></i>
    //                 </button>
    //                 <!-- Delete  btn -->
    //                 <button type="button" id="' . $product['id'] . '" name="" id="" class="btn btn-danger btn-lg btn-block">
    //                     <i class="fa fa-trash" aria-hidden="true"></i>
    //                 </button>
    //             </td>
    //         </tr>
    //     ';
    // }
    // echo json_encode([
    //     'data' => $upload,
    // ]);

} else {
    echo json_encode([
        'message' => 'Wrong method passed',
        'status' => 400
    ]);
}
