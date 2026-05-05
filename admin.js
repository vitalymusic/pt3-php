let  openDialog1Btn = document.querySelector('.openDialog1Btn')
let  dialg1CloseBtn = document.querySelector('.dialg1CloseBtn')
let  dialog1 = document.querySelector('#dialog1')


openDialog1Btn.onclick = ()=>{
    dialog1.show()
}
dialg1CloseBtn.onclick = ()=>{
    dialog1.close()
}


let editUserBtns = document.querySelectorAll('.userEditBtn');

for (editBtn of editUserBtns ){
    editBtn.onclick = (e)=>{
        fetch(`admin_core.php?action=loadUser&user_id=${e.target.dataset.user_id}`)
            .then(data=>{return data.json()})
            .then(data=>{
                // console.log(data);
                form = document.querySelector('#dialog2 form');
                form[0].value=data.name;
                form[1].value=data.id;
                form[2].value=data.surname;
                form[3].value=data.email;
                form[4].value=data.phone;
                document.querySelector('#dialog2').show();
            })
    }
}
