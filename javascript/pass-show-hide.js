const pswrdfield = document.querySelector(".form  input[type='password']"),
toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = ()=> {
	if(pswrdfield.type == "password")
	{
		pswrdfield.ty = "text";
		toggleBtn.classList.add("active");
	}
	else
	{
		pswrdfield.type = "password";
		toggleBtn.classList.remove("active");
	}
}