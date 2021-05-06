<!DOCTYPE html>
<html>
<head>
    <title>Edit Minor</title>
    <link rel="stylesheet" type="text/css" href="pagesU.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <div id="grad1">

    <ul>
      <div class="header">
      <img src='images/saturn1.png' alt="logo" />
      <div class="dropdown" style="float:right;">
          <button class="dropbtn">Michael Borsch</button>
          <div class="dropdown-content">
          <a href="/MyInfoA">My Info</a>
          <a href="/LogOut">Log out</a>

        </div>
      </div>
    </div>

    </ul>

<style>
label{display:block;
align-content: center;}
form input{
  border:none;
  outline:none;
  box-sizing:border-box;
  padding: 10px 10px;
  width: 25%;
}
form.invert input{border:1px solid rgba(0,0,0,0.2);outline:none;}

form>button:nth-of-type(1){
 color:green;display:none;
}
form>button:nth-of-type(2){
 color:red;display:none;
}
form>button:nth-of-type(3){
 color:purple;display:inline-block;
}
form.invert>button:nth-of-type(1){
 display:inline-block;
}
form.invert>button:nth-of-type(2){
 display:inline-block;
}
form.invert>button:nth-of-type(3){
 display:none;
}
</style>
<script>
(function(W){
 var D,form,bts,ipt;
 function init(){
  D=W.document,previous=[];
  form=D.getElementsByTagName('form')[0];
  bts=form.getElementsByTagName('button');
  ipt=form.getElementsByTagName('input');
  form.addEventListener('submit',save,false);
  bts[1].addEventListener('click',cancel,false);
  bts[2].addEventListener('click',edit,false);
 }
 function save(e){
  e.preventDefault();
  form.classList.remove('invert');
  var l=ipt.length;
  while(l--){
   ipt[l].readOnly=true;
  };
  previous=[];
  //send your info here
 }
 function edit(e){
  e.preventDefault();
  form.classList.add('invert');
  var l=ipt.length;
  while(l--){
   previous[l]=ipt[l].value;
   ipt[l].readOnly=false;
  }
 }
 function cancel(e){
  form.classList.remove('invert');
  e.preventDefault();
  var l=ipt.length;
  while(l--){
   ipt[l].value=previous[l];
   ipt[l].readOnly=true;
  }
 }
 W.addEventListener('load',init,false);
})(window)
</script>
</div>
<body>


<form>
<label>Minor ID:     <input readonly value="####"></label>
<label>Minor Name:   <input readonly value="Intro Science"></label>
<label>Department ID: <input readonly value="008"></label>


<button>Save</button><button>Cancel</button><button>Edit</button><br>
<input type = "submit" value ="Delete" class="buttonDelete">
</form>


</body>
</div>
</html>
