<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('uk', array (
  'validators' => 
  array (
    'This value should be false.' => 'Значення повинно бути Ні.',
    'This value should be true.' => 'Значення повинно бути Так.',
    'This value should be of type {{ type }}.' => 'Тип значення повинен бути {{ type }}.',
    'This value should be blank.' => 'Значення повинно бути пустим.',
    'The value you selected is not a valid choice.' => 'Обране вами значення недопустиме.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Ви повинні обрати хоча б {{ limit }} варіант.|Ви повинні обрати хоча б {{ limit }} варіанти.|Ви повинні обрати хоча б {{ limit }} варіантів.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Ви повинні обрати не більше ніж {{ limit }} варіантів.',
    'One or more of the given values is invalid.' => 'Одне або кілька заданих значень є недопустимі.',
    'This field was not expected.' => 'Це поле не очікується.',
    'This field is missing.' => 'Це поле не вистачає.',
    'This value is not a valid date.' => 'Дане значення не є вірною датою.',
    'This value is not a valid datetime.' => 'Дане значення дати та часу недопустиме.',
    'This value is not a valid email address.' => 'Значення адреси электронної пошти недопустиме.',
    'The file could not be found.' => 'Файл не знайдено.',
    'The file is not readable.' => 'Файл не читається.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл занадто великий ({{ size }} {{ suffix }}). Дозволений максимальний розмір {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'MIME-тип файлу недопустимий ({{ type }}). Допустимі MIME-типи файлів {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Значення повинно бути {{ limit }} або менше.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Значення занадто довге. Повинно бути рівне {{ limit }} символу або менше.|Значення занадто довге. Повинно бути рівне {{ limit }} символам або менше.|Значення занадто довге. Повинно бути рівне {{ limit }} символам або менше.',
    'This value should be {{ limit }} or more.' => 'Значення повинно бути {{ limit }} або більше.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Значення занадто коротке. Повинно бути рівне {{ limit }} символу або більше.|Значення занадто коротке. Повинно бути рівне {{ limit }} символам або більше.|Значення занадто коротке. Повинно бути рівне {{ limit }} символам або більше.',
    'This value should not be blank.' => 'Значення не повинно бути пустим.',
    'This value should not be null.' => 'Значення не повинно бути null.',
    'This value should be null.' => 'Значення повинно бути null.',
    'This value is not valid.' => 'Значення недопустиме.',
    'This value is not a valid time.' => 'Значення часу недопустиме.',
    'This value is not a valid URL.' => 'Значення URL недопустиме.',
    'The two values should be equal.' => 'Обидва занчення повинні бути одинаковими.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл занадто великий. Максимальний допустимий розмір {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Файл занадто великий.',
    'The file could not be uploaded.' => 'Файл не можливо завантажити.',
    'This value should be a valid number.' => 'Значення має бути допустимим числом.',
    'This file is not a valid image.' => 'Цей файл не є допустимим форматом зображення.',
    'This is not a valid IP address.' => 'Це некоректна IP адреса.',
    'This value is not a valid language.' => 'Це некоректна мова.',
    'This value is not a valid locale.' => 'Це некоректна локалізація.',
    'This value is not a valid country.' => 'Це некоректна країна.',
    'This value is already used.' => 'Це значення вже використовується.',
    'The size of the image could not be detected.' => 'Не вдалося визначити розмір зображення.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Ширина зображення занадто велика ({{ width }}px). Максимально допустима ширина {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Ширина зображення занадто мала ({{ width }}px). Мінімально допустима ширина {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Висота зображення занадто велика ({{ height }}px). Максимально допустима висота {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Висота зображення занадто мала ({{ height }}px). Мінімально допустима висота {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Значення має бути поточним паролем користувача.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Значення повиино бути рівним {{ limit }} символу.|Значення повиино бути рівним {{ limit }} символам.|Значення повиино бути рівним {{ limit }} символам.',
    'The file was only partially uploaded.' => 'Файл був завантажений лише частково.',
    'No file was uploaded.' => 'Файл не був завантажений.',
    'No temporary folder was configured in php.ini.' => 'Не налаштована тимчасова директорія в php.ini.',
    'Cannot write temporary file to disk.' => 'Неможливо записати тимчасовий файл на диск.',
    'A PHP extension caused the upload to fail.' => 'Розширення PHP викликало помилку при завантаженні.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ця колекція повинна містити {{ limit }} елемент чи більше.|Ця колекція повинна містити {{ limit }} елемента чи більше.|Ця колекція повинна містити {{ limit }} елементів чи більше.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ця колекція повинна містити {{ limit }} елемент чи менше.|Ця колекція повинна містити {{ limit }} елемента чи менше.|Ця колекція повинна містити {{ limit }} елементов чи менше.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ця колекція повинна містити рівно {{ limit }} елемент.|Ця колекція повинна містити рівно {{ limit }} елемента.|Ця колекція повинна містити рівно {{ limit }} елементів.',
    'Invalid card number.' => 'Невірний номер карти.',
    'Unsupported card type or invalid card number.' => 'Непідтримуваний тип карти або невірний номер карти.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Це не дійсний міжнародний номер банківського рахунку (IBAN).',
    'This value is not a valid ISBN-10.' => 'Значення не у форматі ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Значення не у форматі ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Значення не відповідає форматам ISBN-10 та ISBN-13.',
    'This value is not a valid ISSN.' => 'Значення має невірний формат ISSN.',
    'This value is not a valid currency.' => 'Значення має невірний формат валюти.',
    'This value should be equal to {{ compared_value }}.' => 'Значення повинно дорівнювати {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Значення має бути більше ніж {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Значення має бути більше або дорівнювати {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значення має бути ідентичним {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Значення повинно бути менше ніж {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Значення повинно бути менше або дорівнювати {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Значення не повинно дорівнювати  {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значення не повинно бути ідентичним {{ compared_value_type }} {{ compared_value }}.',
    'This form should not contain extra fields.' => 'Ця форма не повинна містити додаткових полів.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Завантажений файл занадто великий. Будь-ласка, спробуйте завантажити файл меншого розміру.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF значення недопустиме. Будь-ласка, спробуйте відправити форму знову.',
    'fos_user.username.already_used' => 'Логін вже використовується',
    'fos_user.username.blank' => 'Будь ласка, вкажіть логін',
    'fos_user.username.short' => '[-Inf,Inf]Логін занадто короткий',
    'fos_user.username.long' => '[-Inf,Inf]Логін занадто довгий',
    'fos_user.email.already_used' => 'Email вже використовується',
    'fos_user.email.blank' => 'Будь ласка, вкажіть Ваш email',
    'fos_user.email.short' => '[-Inf,Inf]Email занадто короткий',
    'fos_user.email.long' => '[-Inf,Inf]Email занадто довгий',
    'fos_user.email.invalid' => 'Email у невірному форматі',
    'fos_user.password.blank' => 'Будь ласка, вкажіть пароль',
    'fos_user.password.short' => '[-Inf,Inf]Пароль занадто короткий',
    'fos_user.new_password.blank' => 'Будь ласка, вкажіть новый пароль',
    'fos_user.new_password.short' => '[-Inf,Inf]Новий пароль занадто короткий',
    'fos_user.current_password.invalid' => 'Ви невірно ввели Ваш поточний пароль',
    'fos_user.group.blank' => 'Будь ласка, вкажіть назву групи',
    'fos_user.group.short' => '[-Inf,Inf]Назва групи занадто коротка',
    'fos_user.group.long' => '[-Inf,Inf]Назва групи занадто довга',
  ),
  'FOSUserBundle' => 
  array (
    'Bad credentials' => 'Невірне ім\'я користувача або пароль',
    'Bad credentials.' => 'Невірне ім\'я користувача або пароль.',
    'group.edit.submit' => 'Оновити групу',
    'group.show.name' => 'Назва групи',
    'group.new.submit' => 'Створити групу',
    'group.flash.updated' => 'Група оновлена',
    'group.flash.created' => 'Група створена',
    'group.flash.deleted' => 'Група видалена',
    'security.login.username' => 'Ім\'я користувача',
    'security.login.password' => 'Пароль',
    'security.login.remember_me' => 'Запам\'ятати мене',
    'security.login.submit' => 'Увійти',
    'profile.show.username' => 'Ім\'я користувача',
    'profile.show.email' => 'Електронна адреса',
    'profile.edit.submit' => 'Оновити',
    'profile.flash.updated' => 'Профіль користувача оновлено',
    'change_password.submit' => 'Змінити пароль',
    'change_password.flash.success' => 'Пароль змінено',
    'registration.check_email' => 'Листа надіслано на адресу %email%. У ньому міститься посилання, за яким Ви можете підтвердити свою реєстрацію.',
    'registration.confirmed' => 'Вітаємо %username%, ваш аккаунт підтверджено.',
    'registration.back' => 'Повернутися на попередню сторінку.',
    'registration.submit' => 'Реєстрація',
    'registration.flash.user_created' => 'Користувач успішно створений',
    'registration.email.subject' => 'Вітаємо %username%!',
    'registration.email.message' => 'Вітаємо %username%!

Для підтверждення Вашої реєстрації, перейдіть за посиланням %confirmationUrl%

З найкращими побажаннями,
команда сайту.
',
    'resetting.password_already_requested' => 'Пароль для данного користувача вже було запрошено за останні 24 години.',
    'resetting.check_email' => 'Листа на адресу %email% вже відправлено. Воно містить посилання, при переході за яким Ваш пароль буде скинуто.',
    'resetting.request.invalid_username' => 'Користувач "%username%" не існує.',
    'resetting.request.username' => 'Ім\'я користувача',
    'resetting.request.submit' => 'Скинути пароль',
    'resetting.reset.submit' => 'Змінити пароль',
    'resetting.flash.success' => 'Пароль успішно скинуто',
    'resetting.email.subject' => 'Скидання пароля',
    'resetting.email.message' => 'Вітаємо %username%!

Для скидання пароля - будь ласа, перейдіть за посиланням %confirmationUrl%

З найкращими побажаннями,
команда сайту.
',
    'layout.logout' => 'Вихід',
    'layout.login' => 'Вхід',
    'layout.register' => 'Реєстрація',
    'layout.logged_in_as' => 'Ви увійшли як %username%',
    'form.group_name' => 'Назва групи',
    'form.username' => 'Ім\'я користувача',
    'form.email' => 'Електронна адреса',
    'form.current_password' => 'Поточний пароль',
    'form.password' => 'Пароль',
    'form.password_confirmation' => 'Підтвердіть пароль',
    'form.new_password' => 'Новий пароль',
    'form.new_password_confirmation' => 'Підтвердіть пароль',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'fos_user.username.already_used' => 'The username is already used',
    'fos_user.username.blank' => 'Please enter a username',
    'fos_user.username.short' => '[-Inf,Inf]The username is too short',
    'fos_user.username.long' => '[-Inf,Inf]The username is too long',
    'fos_user.email.already_used' => 'The email is already used',
    'fos_user.email.blank' => 'Please enter an email',
    'fos_user.email.short' => '[-Inf,Inf]The email is too short',
    'fos_user.email.long' => '[-Inf,Inf]The email is too long',
    'fos_user.email.invalid' => 'The email is not valid',
    'fos_user.password.blank' => 'Please enter a password',
    'fos_user.password.short' => '[-Inf,Inf]The password is too short',
    'fos_user.password.mismatch' => 'The entered passwords don\'t match',
    'fos_user.new_password.blank' => 'Please enter a new password',
    'fos_user.new_password.short' => '[-Inf,Inf]The new password is too short',
    'fos_user.current_password.invalid' => 'The entered password is invalid',
    'fos_user.group.blank' => 'Please enter a name',
    'fos_user.group.short' => '[-Inf,Inf]The name is too short',
    'fos_user.group.long' => '[-Inf,Inf]The name is too long',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'FOSUserBundle' => 
  array (
    'Bad credentials' => 'Invalid username or password',
    'Bad credentials.' => 'Invalid username or password.',
    'group.edit.submit' => 'Update group',
    'group.show.name' => 'Group name',
    'group.new.submit' => 'Create group',
    'group.flash.updated' => 'The group has been updated',
    'group.flash.created' => 'The group has been created',
    'group.flash.deleted' => 'The group has been deleted',
    'security.login.username' => 'Username',
    'security.login.password' => 'Password',
    'security.login.remember_me' => 'Remember me',
    'security.login.submit' => 'Login',
    'profile.show.username' => 'Username',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Update',
    'profile.flash.updated' => 'The profile has been updated',
    'change_password.submit' => 'Change password',
    'change_password.flash.success' => 'The password has been changed',
    'registration.check_email' => 'An email has been sent to %email%. It contains an activation link you must click to activate your account.',
    'registration.confirmed' => 'Congrats %username%, your account is now activated.',
    'registration.back' => 'Back to the originating page.',
    'registration.submit' => 'Register',
    'registration.flash.user_created' => 'The user has been created successfully',
    'registration.email.subject' => 'Welcome %username%!',
    'registration.email.message' => 'Hello %username%!

To finish activating your account - please visit %confirmationUrl%

Regards,
the Team.
',
    'resetting.password_already_requested' => 'The password for this user has already been requested within the last 24 hours.',
    'resetting.check_email' => 'An email has been sent to %email%. It contains a link you must click to reset your password.',
    'resetting.request.invalid_username' => 'The username or email address "%username%" does not exist.',
    'resetting.request.username' => 'Username or email address',
    'resetting.request.submit' => 'Reset password',
    'resetting.reset.submit' => 'Change password',
    'resetting.flash.success' => 'The password has been reset successfully',
    'resetting.email.subject' => 'Reset Password',
    'resetting.email.message' => 'Hello %username%!

To reset your password - please visit %confirmationUrl%

Regards,
the Team.
',
    'layout.logout' => 'Logout',
    'layout.login' => 'Login',
    'layout.register' => 'Register',
    'layout.logged_in_as' => 'Logged in as %username%',
    'form.group_name' => 'Group name',
    'form.username' => 'Username',
    'form.email' => 'Email',
    'form.current_password' => 'Current password',
    'form.password' => 'Password',
    'form.password_confirmation' => 'Repeat password',
    'form.new_password' => 'New password',
    'form.new_password_confirmation' => 'Repeat new password',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
