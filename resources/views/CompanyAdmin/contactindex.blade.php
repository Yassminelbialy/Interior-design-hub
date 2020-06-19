@extends('admin.companyBase')
@section('CompanyAdminBase')
<div class="text-center">
  <table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
    <thead>

      <tr>
        <th scope="col" class="text-light h6" style="font-weight:700">#</th>
        <th scope="col" class="text-light h6" style="font-weight:700">Phone</th>
        <th scope="col" class="text-light h6" style="font-weight:700">Email</th>
        <th scope="col" class="text-light h6" style="font-weight:700">Telegram</th>
        <th scope="col" class="text-light h6" style="font-weight:700">Facebook</th>
        <th scope="col" class="text-light h6" style="font-weight:700">Whats</th>
        <th scope="col" class="text-light h6" style="font-weight:700">Viber</th>
        <th scope="col" class="text-light h6" style="font-weight:700">Pinterest</th>
        <th scope="col" class="text-light h6" style="font-weight:700">Instagram</th>
        <th scope="col" cclass="text-light h6" style="font-weight:700">WLink</th>
        <th scope="col" class="text-light h6" style="font-weight:700">Actions</th>
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