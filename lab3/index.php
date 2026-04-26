<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма анкеты</title>
    <style>
body {
    max-width: 700px;
    margin: 0 auto;
    padding: 10px;
    background-color: #f398c3;
    color: #c93b6b;
}

h1 {
    text-align: center;
}

.success-message{
    color: white;
    font: 16pt bold;
    margin-top: 10px;
    padding: 10px;
    border-radius: 5px;
    background-color: #606d42;
    border: none;
    border-radius: 4px;
    text-align: center;
}

form{
    background-color: #f8f8e0;
    padding: 10px;
    border-radius: 4px;
height: 100%;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
input[type="tel"],
input[type="email"],
input[type="date"],
textarea,
select {
margin-top: 5px;
    width: 100%;
    padding: 8px;
    border: 1px solid #9eb370;
    border-radius: 4px;
    box-sizing: border-box;
}

textarea {
    height: 100px;
}

.radio-group, .checkbox-group {
    display: flex;
    align-items: center;
    gap: 8px;
    margin: 5px 0;
}

.error {
    color: red;
    font-size: 0.9em;
    margin-top: 5px;
}

button {
    background-color: #9eb370;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #606d42;
}
</style>
</head>
<body>
    <form action="process.php" method="POST">
    <h1>Анкета</h1>
        <div class="form-group">
            <label for="fio">ФИО:</label>
            <input type="text" id="fio" name="fio" required>
            <div id="fio-error" class="error" style="color: red; font-size: 14px;"></div>
            <?php if (isset($errors['fio'])): ?>
                <div class="error"><?= $errors['fio'] ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="phone">Телефон:</label>
            <input type="tel" id="phone" name="phone" required>
            <?php if (isset($errors['phone'])): ?>
                <div class="error"><?= $errors['phone'] ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <?php if (isset($errors['email'])): ?>
                <div class="error"><?= $errors['email'] ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="birthdate">Дата рождения:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            <?php if (isset($errors['birthdate'])): ?>
                <div class="error"><?= $errors['birthdate'] ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label>Пол:</label>
            <div class="radio-group">
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="male">Мужской</label>
            </div>
            <div class="radio-group">
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Женский</label>
            </div>
            <?php if (isset($errors['gender'])): ?>
                <div class="error"><?= $errors['gender'] ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="languages">Любимый язык программирования:</label>
            <select id="languages" name="languages[]" multiple="multiple" required>
                <option value="Pascal">Pascal</option>
                <option value="C">C</option>
                <option value="C++">C++</option>
                <option value="JavaScript">JavaScript</option>
                <option value="PHP">PHP</option>
                <option value="Python">Python</option>
                <option value="Java">Java</option>
                <option value="Haskel">Haskel</option>
                <option value="Clojure">Clojure</option>
                <option value="Prolog">Prolog</option>
                <option value="Scala">Scala</option>
                <option value="Go">Go</option>
            </select>
            <?php if (isset($errors['languages'])): ?>
                <div class="error"><?= $errors['languages'] ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="bio">Биография:</label>
            <textarea id="bio" name="bio" required></textarea>
            <?php if (isset($errors['bio'])): ?>
                <div class="error"><?= $errors['bio'] ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <div class="checkbox-group">
                <input type="checkbox" id="contract" name="contract" required>
                <label for="contract">С контрактом ознакомлен</label>
            </div>
            <?php if (isset($errors['contract'])): ?>
                <div class="error"><?= $errors['contract'] ?></div>
            <?php endif; ?>
        </div>

        <button type="submit">Сохранить</button>
        
        <?php if (isset($showSuccess) && $showSuccess): ?>
            <div class="success-message">
                Спасибо за заполнение формы!
            </div>
        <meta http-equiv="refresh" content="4; URL=/be/lab4/">

        <?php endif; ?>

    </form>
</body>
</html>
