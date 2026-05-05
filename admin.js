let  openDialog1Btn = document.querySelector('.openDialog1Btn')
let  dialg1CloseBtn = document.querySelector('.dialg1CloseBtn')
let  dialog1 = document.querySelector('#dialog1')


openDialog1Btn.onclick = ()=>{
    dialog1.show()
}
dialg1CloseBtn.onclick = ()=>{
    dialog1.close()
}
