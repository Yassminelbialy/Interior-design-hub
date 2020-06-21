@extends('admin.base')
@section('adminbase')

<table class="table table-dark ml-2 mt-2 text-center" style="background-color: rgba(0,0,0,0.5);">
  <thead>
    <tr>
     
      <th scope="col" class="text-light h6" style="font-weight:700">{{trans('messages.CompanyName')}}</th>
      <th scope="col" class="text-light h6" style="font-weight:700">{{trans('messages.NumberOfClients')}}</th>
     
      
    </tr>
    
  </thead>
  
    <tbody>
        @forelse($companyCounter as $counter)
            <tr>
            
                <td>{{ $counter->companyName }}</td>
                <td> {{ $counter->counter }} </td>
            
            </tr>

        @empty
        
        @endforelse
    </tbody>
</table>
@endsection