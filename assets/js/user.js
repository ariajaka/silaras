function validasi(form){
  if (form.nama.value == ""){
    alert("Nama user harus diisi!");
    form.nama.focus();
    return (false);
  }else if(form.password.value == ""){
      alert("Password harus diisi untuk keamanan!");
      form.password.focus();
      return(false);
  }else if (form.password.value.length < 6){
    alert("Panjang password minimal 6 karater!");
    form.nama.focus();
    return (false);
  }else if(form.password2.value == ""){
      alert("Konfirmasi password yang dibuat!");
      form.password2.focus();
      return(false);
  }else if (form.password2.value != form.password.value){
    alert("Password tidak sama, silahkan ulangi");
    form.nama.focus();
    return (false);
  }
return (true);
}