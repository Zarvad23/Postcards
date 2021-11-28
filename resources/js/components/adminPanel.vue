<template>
    <div class="adminPanel">
    <div class="container">
        <paginator name="Авторизация"></paginator>
        <div class="authorizationForm">
            <form>
                <label class="authorizationform-label" for="login">Логин</label>
                <input class="authorizationform-input" type="text" id="login" name="login" placeholder="Введите логин...">
                <label class="authorizationform-label" for="password">Пароль</label>
                <input class="authorizationform-input" type="text" id="password" name="password" placeholder="Введите пароль...">
                <button class="authorizationBtn" type="submit" >Авторизоваться</button>
            </form>
        </div>
    </div>
</div>
</template>
<script>
import paginator from './paginator'
export default {
    components: {
        paginator
    }
}
</script>