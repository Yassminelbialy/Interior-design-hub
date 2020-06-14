@extends('admin.companyBase')
@section('CompanyAdminBase')
<div class="text-center" style="width:1000px; height:600px;">
    <embed src="/cvs/{{$jopAppli->cv}}" style="width:100%; height:100%;" frameborder="0">
</div>
@endsection