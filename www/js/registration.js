!function() {
	'use strict';

	var alerts = {
		EMPTY_FIELD: 'Заполните поля помеченные красным'
	};

	// go_reg

	var go_reg_btn = getEl('go_reg'),
		reg_form = getEl('reg_form');

	// --

	on(go_reg_btn, 'click', function() {

		if(validateForm(reg_form)) {
			sendForm();
		}

		return false;
	});

	function validateForm(form_node) {
		var inputNodes = document.querySelectorAll('input'),
			inputs = {}, err = 0;

		for(var i = 0, len = inputNodes.length; i<len; i++) {
			inputs[inputNodes[i].getAttribute('name')] = inputNodes[i];
			removeClass(inputNodes[i], 'err_input');
		}


		// login

		if(!/^[a-zA-Z0-9_\.]{5,100}$/.test(inputs.login.value.trim())) {
			addClass(inputs.login, 'err_input');
			err = 1;
		}


		// pass

		if(!inputs.password.value.trim().length || (inputs.password.value.trim() != inputs.password_confirm.value.trim())) {
			addClass(inputs.password, 'err_input');
			addClass(inputs.password_confirm, 'err_input');
			err = 1;
		}


		// first name

		if(!/^[a-zA-Z0-9а-яА-Я_\.]+$/.test(inputs.first_name.value.trim())) {
			addClass(inputs.first_name, 'err_input');
			err = 1;
		}


		// last name

		if(!/^[a-zA-Z0-9а-яА-Я_\.]+$/.test(inputs.first_name.value.trim())) {
			addClass(inputs.last_name, 'err_input');
			err = 1;
		}

		if(!err) {
			return true;
		}

		return false;
	}

	function sendForm() {

	}

	function on(elem, type, fn) {
		if (elem.addEventListener) {
    	  elem.addEventListener(type, fn, false);
    	} else if (elem.attachEvent) {
    	  elem.attachEvent('on' + type, fn);
    	} else {
    		elem['on'+type] = fn;
    	}
	}

	function off(elem, type, fn) {
		if (elem.removeEventListener) {
    	  elem.removeEventListener(type, fn, false);
    	} else if (elem.detachEvent) {
    	  elem.detachEvent('on' + type, fn);
    	} else {
    		elem['on'+type] = null;
    	}
	}

	function getEl(id){
	  if (id.indexOf('#') === 0) {
		id = id.slice(1);
	  }
	
	  return document.getElementById(id);
	}

	function hasClass(element, classToCheck){
  		return ((' ' + element.className + ' ').indexOf(' ' + classToCheck + ' ') !== -1);
	}

	function addClass(element, classToAdd){
  		if (!hasClass(element, classToAdd)) {
    	element.className = element.className === '' ? classToAdd : element.className + ' ' + classToAdd;
  		}
	}

	function removeClass(element, classToRemove){
		var classNames, i;
	
		if (!hasClass(element, classToRemove)) {return;}

		classNames = element.className.split(' ');

		for (i = classNames.length - 1; i >= 0; i--) {
		  if (classNames[i] === classToRemove) {
		    classNames.splice(i,1);
		  }
		}
	
		element.className = classNames.join(' ');
	}

}();