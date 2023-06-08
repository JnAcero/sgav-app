const formPersona = document.querySelector('#form-persona');
const myHeaders = new Headers({"Content-Type": "application/json"});

formPersona.addEventListener('submit', async(e)=>{
    e.preventDefault();
    let data = Object.fromEntries(new FormData(e.target));
    let config ={
        method:'POST',
        headers:myHeaders,
        body:JSON.stringify(data)
    }
    let response = await (await fetch("scripts/insertPersona.php",config)).text();
})