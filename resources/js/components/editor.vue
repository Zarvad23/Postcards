<template>
    <div class="editor">
    <div class="container">
        <paginator name="Редактор"></paginator>
        <div class="editor-container">
            <div class="editorInstrumentsContainer">
                <div class="editor-title">
                    <p>Редактор</p>
                </div>
                <div class="editor-instruments">
                    <p>Ввод текста</p>
                    <div class="i-text">
                        <label for="title">Заголовок</label>
                        <input type="text" name="title" v-model="title" placeholder="Введи ваш заголовок...">
                    </div>
                    <div class="i-Brush">
                        <label for="description">Текст</label>
                        <textarea name="description" id="description" v-model="text" placeholder="Введите ваш текст" cols="30" rows="10"></textarea>
                    </div>
                    <div class="Brush">
                        <p><img src="images/BrushIcon.svg">Кисть <span></span></p>
                    </div>
                </div>
            </div>
            <div class="frameContainer">
                <input type="text" name="frameTitle" id="frameTitle" :value="title">
                <textarea name="frameText" id="frameText" cols="30" rows="10" :value="text"></textarea>
                <img :src="getTemplate" alt="Тест">
            </div>
        </div>
        <div class="editorBtns">
            <button type="button">Сохранить как...</button>
            <span>или</span>
            <button type="button">Создать рассылку</button>
        </div>
    </div>
</div>
</template>
<script>
import paginator from './paginator'
export default {
    data() {
        return{
            title: '',
            text: '',
        }
    },
    components: {
        paginator
    },
    computed: {
        getTemplate() {
            return this.$store.getters.GET_TEMPLATE;
        }
    }
}
</script>