@extends('admin.companyBase')
@section('CompanyAdminBase')
<a href="AdminOrder/create " class="btn btn-info m-2">Add New Order</a>

<table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
  <thead>
    <tr>
      <th scope="col" class="text-light h6" style="font-weight:700">#</th>
      <th scope="col" class="text-light h6" style="font-weight:700">Description</th>
      <th scope="col" class="text-light h6" style="font-weight:700">State</th>
      <th scope="col" class="text-light h6" style="font-weight:700">Cost</th>
      <th scope="col" class="text-light h6" style="font-weight:700">Contract Image</th>
      <th scope="col" class="text-light h6" style="font-weight:700">Confirm Order</th>
      <th scope="col" class="text-danger h6" style="font-weight:700">Action</th>
    </tr>
    @foreach($OrdersDetails as $order)
      @if($order->user->adminRole != 1 && $order->user->adminRole != 2)
        <tr>
          <td>{{$order->id}}</td>
          <td>{{$order->description}}</td>
          <td>{{$order->state}}</td>
          <td>{{$order->cost}}</td>
          <td>
            <img src="{{ asset ( 'images/AdminOrderImages/' . $order->contractImg) }}" width="80" height="80" />
          </td>
          <td>
            @if($order->user->state == 0)
            <a href="{{ route('company.order' , $order->user_id) }}" class="btn text-danger"><i class="far fa-check-square fa-3x"></i></a>
            @else
            <a href="{{ route('company.order' , $order->user_id) }}" class="btn text-info"><i class="fas fa-check-square fa-3x"></i></a>
            @endif
          </td>
          <td>
            {!! Form::open(['route' => ['company.AdminOrder.destroy', $order->id] , 'method'=>'delete' ,'style'=>' display: inline-block ']) !!}
            {!! Form::submit('Delete !' , ['class'=>'btn btn-danger']) !!}
            {!! Form::close() !!}
            <a href="{{ route('company.AdminOrder.edit' , $order->id) }}" class="btn btn-success">Update !</a>

          </td>
        <tr>
      @endif
    @endforeach
  </thead>
  <tbody>
  </tbody>
</table>
@endsection