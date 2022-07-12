function open(){
    document.querySelector("#cont").classList.remove('hidden');
}

function close(){
    document.querySelector("#cont").classList.add('hidden');
}

const menuopen=document.querySelector("#menuMOBILE").addEventListener('click', open);
const menuclose=document.querySelector("#close").addEventListener('click', close);






function onResponse(response){
    return response;
}

function delLike(event){
    const pic = event.currentTarget;
    const picsrc = pic.name;
    pic.classList.add("hidden");
    console.log(picsrc);

    fetch(BASE_URL + "profile/delete/" + picsrc).then(onResponse);
}


const notlike= document.querySelectorAll("img.photoprofilo");
for(const i of notlike){
    i.addEventListener('click', delLike);
}