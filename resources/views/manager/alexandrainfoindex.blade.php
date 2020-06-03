@extends('admin.base')

@section('adminbase')

<div class="text-center">
    <table class="table table-hover table-info">
        <thead>
            
          <tr class="table-dark">
            <th scope="col">#</th>
            <th scope="col">image</th>
            <th scope="col">Name</th>
            <th scope="col">Hint</th>
            <th scope="col">Statement</th>
            <th scope="col">video</th>

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
