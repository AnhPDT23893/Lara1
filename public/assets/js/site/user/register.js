/**
 * Created by NgocSon on 3/21/2015.
 */

$("#form-register").validate({
    rules:{
        fist_name:{
            required: true,
            minlength: 4
        },
        last_name:{
            required: true,
            minlenght: 3
        },
        password:{
            required:true,
            minlenght: 6
        },
        password_confirmation:{
            equalTo: "#password"
        },
        email:{
            required: true,
            email:true,
            remote:{
                url: $('#email').attr('data-url'),
                type: "POST"
            }
        }
    },
    messages:{
        fist_name:{
            required:"Nhap Fist Name",
            minlength: "Nhap 4 ky tu"
        },
        last_name:{
            required:"Nhap Last Name",
            minlength: "Nhap 4 ky tu"
        },
        password:{
            required: "Nhap password",
            minlength:"Password 6 ky tu"
        },
        password_confirmation:{
            equalTo:"Mat khau xac nhan khong dung"
        },
        email:{
            required:"Vui long nhap email",
            email:"Khong dung dinh dang",
            remote: "Email da ton tai"
        }
    }
});