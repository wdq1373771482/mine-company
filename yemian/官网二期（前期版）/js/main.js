function refer(){
	//����
		 if ($.trim($("input[name='name']").val()) == ""){
       			 alert("����д����");
      		  $("input[name='name']").focus();
       		  return false;
		    }

	//�ֻ�	
		var mobile_phone = $("input[name='nm_lx_tel']").val();
    	var reg = /^0?1[358]\d{9}$/;
		if ($("input[name='nm_lx_tel']").val() == "" || !reg.test(mobile_phone)){
            alert("����д��ȷ�ֻ�����");
       		$("input[name='nm_lx_tel']").focus();

        	return false;

		 }
	//��֤��
	    var cookiecodestr=$.cookie('sjyzm');
		if(cookiecodestr != null){
			 var cookiecode = cookiecodestr.substr(0,5);	
		}
		var inputcode =$("#checkcode").val();
		if(cookiecode=="" || cookiecode==null|| cookiecode.toLowerCase()!==inputcode.toLowerCase()){
		     alert("����д��ȷ���ֻ���֤��");
			$("input[name='tel_yzm']").addClass("red")
			$("input[name='tel_yzm']").focus();
			return false;
		}else{
			$("input[name='tel_yzm']").removeClass("red");		
		}
	//����
	
	 	mail = $("input[name='email']").val();
   		var reg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if ($("input[name='email']").val() == "" || !reg.test(mail)){
             alert("����д��ȷ����");
       		 $("input[name='email']").focus();

     		return false;
        }
	//QQ��ʽ��֤
	     var qq = $("input[name='qq']").val();
         var reg = /[1-9][0-9]{4,}/;

		 if (qq !== ""){
		    if(!reg.test(qq)){
            alert("����д��ȷQQ����");
            $("input[name='qq']").focus();
            return false;
	    }

		 }
     //��ѧ����
	if($("#jycd").val()==''){

	  alert("��ѡ��Ҫȥ�Ĺ��ң�");
	  return false;
	}
	//��ѧ�׶�
	var mockExaminationJieDuan = $("#studyTarget").val();
	if($("#lxmd").val()==''){
	  alert("��ѡ��Ҫȥ����ѧ����");
	  return false;
	}
}