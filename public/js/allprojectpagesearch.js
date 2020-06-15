
$(function(){

    console.log('ssss')
   $('#search').on('keypress',(e)=>
   {
       console.log(e.target.value) ;
       $.ajax({
           url: "http://localhost:8000/search",
           dataType: 'script',
           cache: true,
           contentType: true,
           processData: true,
           data: {data:e.target.value},                         // Setting the data attribute of ajax with file_data
           type: 'get',
           success:function(data)
           {
               x=JSON.parse(data);
               console.log(x.data);
               console.log(x.data,'ssss');
               $('#alldata').html('');
               $('#before').html('');
               $(`
               <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item active" aria-current="page">Home</li>
                       <li class="breadcrumb-item active" aria-current="page">Over Website</li>

                       <button style="margin: auto;" class="btn btn-secondary">
                           Reset Search
                       </button>
                   </ol>

                </nav>
               `).appendTo('#before')
               drawdata(x.data)

           }
  })///ajax
   })//end on change

   var category ='';
   var company ='';

   var categoryName ='';
   var companyName ='';

   $('.categoryclass').on('click',(e)=>{

       category =$(e.target).attr('name');
       categoryName =$(e.target).html();

       customsearch(category,company)

   })//change category

   $('.companyclass').on('click',(e)=>{

   company =$(e.target).attr('name');
   companyName =$(e.target).html();
   customsearch(category,company)

   })//change company

   $('#before').on('click','button',()=>{
       companyName ='';
       categoryName= '';
       company ='';
       category= '';
       customsearch(category,company)
   })//reset

   function customsearch(category,company) {
       console.log(category,company,'OOO');

       $.ajax({
           url: "http://localhost:8000/allprojectcustomsearch",
           dataType: 'script',
           cache: true,
           contentType: true,
           processData: true,
           data: {category,company},                         // Setting the data attribute of ajax with file_data
           type: 'get',
           success:function(data)
           {
               x=JSON.parse(data);
               console.log(x,'ssss');
               $('#alldata').html('')
               $('#before').html('');
               $(`
               <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item active" aria-current="page">Home</li>
                       <li class="breadcrumb-item active" aria-current="page">Company-${companyName}</li>

                       <li class="breadcrumb-item active" aria-current="page">Category-${categoryName}</li>                            <button style="margin: auto;" class="btn btn-secondary">
                           Reset Search
                       </button>
                   </ol>

                </nav>
               `).appendTo('#before')
               drawdata(x.data)

           }
  })///ajax
   }



function drawdata(data) {
   data.forEach(element => {
                   // console.log(element)
                   $(`
               <div class="col-md-6" >
                   <div class="project_card">
                       <div class="face face1">
                           <img src="/projectimages/${element.mainImage}" class="w-100 h-100" alt="" />
                   </div>
                   <div class="face face2">
                       <div class="content">
                           <h2>
                               ${element.title}
                           </h2>
                           <p>
                               ${element.hint}
                           </p>
                           <a class="btn btn-dark mb-1 text-light" href="/view/${element.id}">View Project</a>

                       </div>
                   </div>
               </div>
           </div>
          `).appendTo('#alldata');//end div added

               });//end llooping
}//lopping to draw


})//document
