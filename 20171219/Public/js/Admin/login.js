/**
 * Created by Administrator on 2017/4/1 0001.
 */
$(document).ready(function(){
    function theLocation(){     //进页面判断表单。空的话就不能提交
        if($('.us').val()=='' && $('.pw').val()=='' && $('#getyzm').val()==''){
            $('.sub').prop('disabled', true);
        }
    }
    window.onload=function(){
        setInterval(theLocation);
    }
    $('.us').blur(function(){   //失去焦点判断用户
        var usvalue = $('.us').val();
        if(usvalue == ''){
            $('.u_code').text('用户名不能为空').css({
                'font-size':'20px',
                'color':'red',
            });
            $('.sub').prop('disabled', true);
        }else if(usvalue.length<6){
            $('.u_code').text('用户名不能少于6位').css({
                'font-size':'20px',
                'color':'red',
            });
        }else{
            $('.u_code').text('');
            $('.sub').prop('disabled', false);
        }
    })
    $('.pw').blur(function(){   //失去焦点判断密码
        var usvalue = $('.pw').val();
        if(usvalue == ''){
            $('.p_code').text('密码不能为空').css({
                'font-size':'20px',
                'color':'red',
            });
            $('.sub').prop('disabled', true);
        }else if(usvalue.length<6){
            $('.p_code').text('密码不能少于6位').css({
                'font-size':'20px',
                'color':'red',
            });
        }else{
            $('.p_code').text('');
            $('.sub').prop('disabled', false);
        }
    })
    $('#getyzm').blur(function(){   //失去焦点判断验证码
        var usvalue = $('#getyzm').val();
        if(usvalue == ''){
            $('.c_code').text('验证码不能为空').css({
                'font-size':'20px',
                'color':'red',
            });
            $('.sub').prop('disabled', true);
        }else{
            $('.c_code').text('');
            $('.sub').prop('disabled', false);
        }
    })
    $(window).click(function(){
        if($('.u_code').text()=='' && $('.p_code').text()=='' && $('.c_code').text()==''){
            $('.sub').prop('disabled', false);
        }
    })
})
