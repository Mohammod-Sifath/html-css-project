$(".btnedit").click(e=>{
   let textvalues =displayData(e);
 
   let id =$("input[name*='id']");
   let name =$("input[name*='name']");
   let age =$("input[name*='age']");
   let username =$("input[name*='username']");
   let password =$("input[name*='password']");

   id.val(textvalues[0]);
   name.val(textvalues[1])
   age.val(textvalues[2])
   username.val(textvalues[3])
   password.val(textvalues[4])
    
});
function displayData(e){
    let id =0;
    const td =$("#tbody tr td");
    let textvalues =[];

    for(const value of td){
  if(value.dataset.id==e.target.dataset.id){
          textvalues[id++] = value.textContent;
        }
    }
    return textvalues;
}
