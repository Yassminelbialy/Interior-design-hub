$(function() {
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

var quizform ={
    design_id:'',
    area:'',
    timeOfREsponse:'',
    participantState:'',
    contactType:'',
    customerName:'',
    customerPhone:'',
    category:'',
    styles:[],
    images:[]
}

$('.modal_quizes').on('change','.q1',(event)=>
    {
            console.log(event.target)
            q1=$(event.target);// get element
            quizform.design_id  = q1.prop('value'); //get value
                console.log(quizform);
                $('#buttontab1')[0].classList.remove('disabled');

        });//question 1 answer

$('.modal_quizes').on('change','.q2',(event)=>
    {

        if(event.target.name=='area')
            {
                 quizform.area = event.target.value;
            }
            if(event.target.name=='file')
            {
                quizform.images = event.target.files;
            }
            $('.buttontab2')[0].classList.remove('disabled');
                console.log(quizform);
    });//question 2 answer
$('.modal_quizes').on('change','input[name="check_quiz3"]',(event)=>
{
    if(event.target.checked == false)
    {
        quizform.styles = quizform.styles.filter((item)=>{return item != event.target.value});
    //remove from aray
    }else
    {
        quizform.styles.push(event.target.value);
    }
    $('.buttontab3')[0].classList.remove('disabled');
});//question 3 answer

$('.modal_quizes').on('change','.q4',(event)=>
{
    q4=$(event.target);// get element
    quizform.participantState  = q4.prop('value'); //get value
    console.log(quizform);
    $('.buttontab4')[0].classList.remove('disabled');
});//question 4 answer

$('.modal_quizes').on('change','.q5',(event)=>
{
    q5=$(event.target);// get element
    quizform.timeOfREsponse  = q5.prop('value'); //get value
    $('.buttontab5')[0].classList.remove('disabled');
});//question 5 answer

$('.modal_quizes').on('change','.q6',(event)=>
{
    q6=$(event.target);// get element
    quizform.contactType  = q6.prop('value'); //get value
    $('.buttontab5')[0].classList.remove('disabled');

 });//question 6 answer
$('.modal_quizes').on('change','.q7',(event)=>
{
    if(event.target.name=='name')
        {
          quizform.customerName=event.target.value;
        }
    if(event.target.name=='phone')
        {
            quizform.customerPhone=event.target.value;
            $('.submitquiz').prop('disabled',false);
        }
});//question 7 answer

$('.submitquiz').on('click',(event)=>
{
    var myform =new FormData ();
    quizform.styles.forEach((a)=>{
    myform.append('styles[]',a);
})
    myform.append('design',quizform.design_id);

    myform.append('area',quizform.area);
    myform.append('timeOfRsponse',quizform.timeOfREsponse);
    myform.append('customerPhoneNo',quizform.customerPhone);
    myform.append('customerName',quizform.customerName);
    myform.append('contactTybe',quizform.contactType);
    myform.append('participateState',quizform.participantState);
    if(quizform.images)
        {
            for (let i=0 ; i < quizform.images.length ; i++)
                {
                    myform.append('file[]',quizform.images[i]);
                }
        }
    $.ajax({
                url: "http://localhost:8000/quiz",
                dataType: 'script',
                cache: false,
                contentType: false,
                processData: false,
                data: myform,                         // Setting the data attribute of ajax with file_data
                type: 'POST',
                success:function(data)
                {
                    x=JSON.parse(data);
                    console.log(x);
                    console.log(data);
                }
       })///ajax
    });
});



