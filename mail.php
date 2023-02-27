<php>
  $to = 'ChernichnyKustik@mail.ru';
  $tema = 'Писмо с заказом на демонтаж';
  $message = 'Имя пользователя: '._POST['name'].'<br>';
  $message = 'Телефон пользователя: '._POST['number'].'<br>';
  mail($to, $tema, $message);
</php>