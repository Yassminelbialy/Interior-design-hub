@extends('Admin.sideNavBar')
@extends('layouts.app')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}
hd{overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
</style>
<body>
<div class="container">
        <table class="table text-center">
            <thead class="bg-info">
                <tr>
                   
                    <th>Name</th>
                    <th>Hint</th>
                    <th>Statment</th>
                    <th>Image</th>
                    <th>Video</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                @foreach($ceoArray as $i)
                    <td>{{$i->name}}</td>
                    <td>{{$i->hint}}</td>
                    <td>{{$i->statement}}</td>
                    <td>{{$i->image}}</td>
                    <td>{{$i->video}}</td>
                    @endforeach
                    <td><button type="button" class="btn btn-danger">Edit</button></td>
                </tr>
            </tbody>   
        </table>
         
        <table class="table text-center">
            <thead class="bg-info">
                <tr> 
                    <th>#</th>
                    <th>Data</th>
                    
                </tr>
            </thead>
            <tbody>
            @foreach($contactArray as $i)    
                <tr>
                    <td> Phone NO </td>
                    <td>{{$i->phoneNo}}</td>
                </tr>
                <tr>
                    <td> Email </td>
                    <td>{{$i->email}}</td>
                </tr>
                <tr>
                    <td> telegramLink </td>
                    <td>{{$i->telegramLink}}</td>
                </tr> <tr>
                    <td> whatsAppLink </td>
                    <td>{{$i->whatsAppLink}}</td>
                </tr> <tr>
                    <td> viberLink </td>
                    <td>{{$i->viberLink}}</td>
                </tr> <tr>
                    <td>  pinterestLink </td>
                    <td>{{$i->pinterestLink}}</td>
                </tr> <tr>
                    <td>  facebookLink </td>
                    <td>{{$i-> facebookLink}}</td>
                </tr> <tr>
                    <td> instaLink </td>
                    <td>{{$i->instaLink}}</td>
                </tr> 
                <tr>
                    <td>  youtubeLink </td>
                    <td>{{$i-> youtubeLink}}</td>
                </tr>
                 <tr>
                    <td> Operation</td>
                    <td><button type="button" class="btn btn-danger">Edit</button></td>
                </tr>
                    @endforeach
                 
            </tbody>
        </table>        
@endsection

