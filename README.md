# phpLearning   

1 四种不同的变量作用域：  
`local`, `global`, `static`, `parameter`  
`static`在函数执行完之后变量不消失  

---
2 echo 和 print  
echo 可以输出多个字符串, `echo(str1, str2, str3)`;  
print 只可以输出一个字符串

---
3 `EOF(heredoc)`  
(1) 必须后接分号，否则编译不通过  
(2) EOF可以用任意其他字符代替，只需保证结束标识与开始标识一致  
(3) 结束标识必须顶格独自占一行 

---
4 `数据类型`：  
`String, Integer Float Boolean Array Object NULL`

---
5 `var_dump()`函数返回变量的数据类型和值, 都转换为十进制

---
6 PHP常量不需要前面加$修饰符，在整个脚本中都可以使用，设置常量使用define函数, 第三个参数为true的话，不区分大小写，并且常量都是全局的