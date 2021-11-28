<template>
    <div class="page-main">
    <div class="container">
        <paginator></paginator>
        <div class="page-main-intro">
            <h1>Сделайте открытку для того кого любите</h1>
            <router-link to="addPhoto">Создать открытку прямо сейчас</router-link>
        </div>
        <div class="page-main-text">
            <p>Создайте открытку с помощью нашего простого редактора, и отправьте её  всем своим друзьям. Вы можете как использовать свой шаблон, так и использовать наши, уже готовые</p>
        </div>
        <div class="editorPreviewContianer">
            <h2>Очень простой редактор</h2>
            <div class="editorPrevew">
                <img src="/images/EditorPreview.png" alt="Превью редактора">
            </div>
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