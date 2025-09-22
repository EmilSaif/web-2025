function getRandomChar(str) {
    return str[Math.floor(Math.random() * str.length)];
  }
  
  function generatePassword(a = 8) {
    // Проверка минимальной длины
    if (a < 4) {
      console.log("Пароль должен быть минимум 4 символа!");
      return "";
    }
  
    // Наборы символов
    const small = 'abcdefghijklmnopqrstuvwxyz';
    const big = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    const nums = '0123456789';
    const specs = '!@#$%^&*';
    
    // Обязательные символы
    let password = '';
    password += getRandomChar(small);  
    password += getRandomChar(nums);   
    password += getRandomChar(big);
    password += getRandomChar(specs); 
    
    // Дополнительные символы
    const all = small + big + nums + specs;
    for (let i = 0; i < (a-4); i++) {
        password += getRandomChar(all);
      
    }
    return password;
  }
  
  console.log(generatePassword()); 