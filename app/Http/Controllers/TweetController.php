<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use mysqli;
use phpDocumentor\Reflection\DocBlock\Tags\InvalidTag;

class TweetController extends Controller
{

    public function store()
    {

        $attributes = request()->validate(['body' => 'required|max:255']);
        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body']
        ]);
        return redirect('/home');
    }
    public function delete()
    {

        $rollno=$_GET['rn'];


        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tweety";

// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection

        if ($conn->connect_error) {

            die("Connection failed: " . $conn->connect_error);
        }


// sql to delete a record

        $sql = "DELETE FROM tweets WHERE id='$rollno'";


        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        $conn->close();


        return redirect('/home');
    }
}
