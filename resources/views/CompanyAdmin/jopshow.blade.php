@extends('admin.companyBase')
@section('CompanyAdminBase')
<div class="text-center">
  <table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">

        <thead>
            
            <tr>
                <td colspan="6"><h1>{{$jop->id}} _ ({{$jop->title}}) </h1></td>
             </tr>
             <tr>
                <th scope="col" class="text-light h6" style="font-weight:700">#</th>
                <th scope="col" class="text-light h6" style="font-weight:700">fullName</th>
                <th scope="col" class="text-light h6" style="font-weight:700">Email</th>
                <th scope="col" class="text-light h6" style="font-weight:700">Age</th>
                <th scope="col" class="text-light h6" style="font-weight:700">CV</th>  
                <th scope="col" class="text-light h6" style="font-weight:700">Portofolio</th>  
                <th scope="col" class="text-light h6" style="font-weight:700">Phone</th>  
                <th scope="col" class="text-light h6" style="font-weight:700" colspan="2">Actions</th>
              </tr>
         
        </thead>
        <tbody>
            @foreach ($applicants as $applicant)
            <tr>              
                <th scope="row">{{$applicant->id}}</th>
                <td>{{$applicant->fullName}}</td>
                <td>{{$applicant->email}}</td>
                <td>{{$applicant->age}}</td>
                <td>
                    <embed src="/cvs/{{$applicant->cv}}" style="width:50px; height:50px;" frameborder="0">
                    
                  </td>
                  </td>
                <td>{{$applicant->urlProtofolio}}</td>
                <td>{{$applicant->phone}}</td>

                <td>
                  <a href="{{route('company.jopAppli.show',$applicant->id)}}"> 
                    <i class="fas fa-binoculars fa-2x" style="color: green"></i>
                  </a>

                </td>
              
              
            </tr>
      @endforeach
           
   
    </tbody>
  </table>
</div>
@endsection