@extends('admin.base')

@section('adminbase')

<div class="text-center">
    <table class="table table-hover table-dark">
        <thead>
            
          <tr>
            <th scope="col" class="text-light h3">#</th>
            <th scope="col" class="text-light h3">image</th>
            <th scope="col" class="text-light h3">Name</th>
            <th scope="col" class="text-light h3">Hint</th>
            <th scope="col" class="text-light h3">Statement</th>
            <th scope="col" class="text-light h3">video</th>

          </tr>
        </thead>
        <tbody>
            {{-- @foreach ($ceoArray as $ceo)
                
            @endforeach  --}}
            <tr>
                <th scope="row"></th>
            <td></td>
            <td></td>
                <td></td>
            <td style="width: 30%" class="justify-content: center;" ></td>
                <td> 
                <a href="#"> <i class="fas fa-binoculars fa-2x" style="color: green"></i></a>

                      
                 </td>

            </tr>
            


        </tbody>
      </table>
</div>
@endsection
