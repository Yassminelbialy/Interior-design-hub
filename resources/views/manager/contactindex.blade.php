@extends('admin.base')

@section('adminbase')

<div class="text-center">
  <table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
    <thead>

      <tr>
        <th scope="col" class="text-light h3">#</th>
        <th scope="col" class="text-light h3">Phone</th>
        <th scope="col" class="text-light h3">Email</th>
        <th scope="col" class="text-light h3">Telegram</th>
        <th scope="col" class="text-light h3">Facebook</th>
        <th scope="col" class="text-light h3">Whats</th>
        <th scope="col" class="text-light h3">Viber</th>
        <th scope="col" class="text-light h3">Pinterest</th>
        <th scope="col" class="text-light h3">Instagram</th>
        <th scope="col" class="text-light h3">WLink</th>
        <th scope="col" class="text-light h3">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($contacts as $contact)
      <tr>
        <th scope="row">{{$contact->id}}</th>
        <td>{{$contact->phoneNo}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->telegramLink}}</td>
        <td>{{$contact->facebookLink}}</td>
        <td>{{$contact->whatsAppLink}}</td>
        <td>{{$contact->viberLink}}</td>
        <td>{{$contact->pinterestLink}}</td>
        <td>{{$contact->instaLink}}</td>
        <td>{{$contact->wLink}}</td>
        <td>
          <a href="{{ route('manager.contacts.edit', $contact->id) }}"> <i class="fas fa-edit fa-2x" style="color: blue"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection