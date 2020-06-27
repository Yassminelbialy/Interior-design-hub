$(function() {
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

var jobform ={
    phone:'',
    file:'',
    email:'',
    age:"",
    urlProtofolio:',',
    fullName:'',

}
console.log('ssssssssssaaaaaaaaa')
$(document).on('change','#jobname',(event)=>
    {
            console.log(event.target)
            q1=$(event.target);// get element
            jobform.fullName  = q1.prop('value'); //get value

        });//question 1 answer

        $(document).on('change','#jobphone',(event)=>
    {
            console.log(event.target)
            q1=$(event.target);// get element
            jobform.phone  = q1.prop('value'); //get value

        });//question 1 answer

        $(document).on('change','#jobage',(event)=>
           {
            console.log(event.target)
            q1=$(event.target);// get element
            jobform.age  = q1.prop('value'); //get value

        });//question 1 answer

        $(document).on('change','#joburl',(event)=>
        {
         console.log(event.target)
         q1=$(event.target);// get element
         jobform.urlProtofolio  = q1.prop('value'); //get value

     });//question 1 answer

     $(document).on('change','#jobemail',(event)=>
     {
      console.log(event.target)
      q1=$(event.target);// get element
      jobform.email  = q1.prop('value'); //get value

  });//question 1 answer  id="jobcv"

  $(document).on('change','#jobcv',(event)=>
  {
   console.log(event.target.files[0])
   q1=$(event.target);// get element
   jobform.file  = event.target.files[0] //get value

});//question 1 answer  id="jobcv"

$(document).on('click','#jobsubmit',(event)=>
{
    var myform =new FormData ();


    myform.append('fullName',jobform.fullName);
    myform.append('email',jobform.email);

    myform.append('phone',jobform.phone);
    myform.append('age',jobform.age);
    myform.append('urlProtofolio',jobform.urlProtofolio);
    myform.append('file',jobform.file);
job =$(event.target).attr('data-job');
job =job?job:'';
console.table(jobform,job)
    $('.alerts ul').html('');

    $.ajax({
                url: "http://localhost:8000/jopapply/"+job,
                dataType: 'script',
                contentType: false,
                processData: false,
                data: myform,                         // Setting the data attribute of ajax with file_data
                type: 'POST',
                success:function(data)
                {
                    console.log(data)
                    x=JSON.parse(data);
                    if(x.erors)
                    {
                        x.erors.forEach(element => {
                             $(`<li>${element}</li>`).appendTo($('.alerts ul'));
                        });

                       console.log(x.erors,'sssss',x.data);
                    }
                    if(x.message)
                    {

                            $(`<li>${x.message+job}</li>`).appendTo($('.alerts ul'));

                        console.log(x.message,'sssss');
                    }

                }
       })///ajax

    });
});



