<!DOCTYPE html>
<html>
<head>
    <title>Student Info</title>
    <link rel="stylesheet" type="text/css" href="pagesU.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @php
            echo(file_get_contents(public_path('css/pagesU.css')))
        @endphp
    </style>
    <div id="grad1">

        <ul>
            <div class="header">
                <a href="student" class="buttonHome"><img src='/images/saturn1.png' alt="logo" >
                <div class="dropdown" style="float:right;">
                    <button class="dropbtn">{{Auth::user()->name}}</button>
                    <div class="dropdown-content">
                        <a href="/MyInfoA">My Info</a>
                        <a href="/logout">Log out</a>

                    </div>
                </div>
            </div>

        </ul>

        <style>
            label{display:block;
                align-content:center;
            }
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
<body>


<form>
    <label>ID Number:   <input readonly value="708322124"></label>
    <label>First Name:  <input readonly value="James"></label>
    <label>Last Name:   <input readonly value="Peng"></label>
    <label>Birth Date:  <input readonly value="02/15/1998"></label>
    <label>EmailAddress:<input readonly value="jpeng@saturnuni.com"></label>
    <label>HomeAddress: <input readonly value="23 Smapler St, Garden City, NY"></label>
    <label>PhoneNumber: <input readonly value="646-231-3432"></label>
    <button>Save</button><button>Cancel</button><button>Edit</button><br>
    <input type = "submit" value ="Delete" class="buttonDelete">
</form>
<div>
    <a href="/studentTranscriptA">Student Transcript</a>
    <a href="/studentDegreeEval">Degree Evaluation</a>
    <a href="/studentAttendanceA">Attendance</a>
    <a href="/studentHolds">Holds</a>
</div>


</body>
</div>
</html>
