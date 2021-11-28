<template>
    <div class="addPhoto">
        <div class="container">
            <paginator name="Создать открытку"></paginator>
            <div class="addPhotoContainer">
                <div class="addPhotoStart">
                    <h3>Вставьте своё изображение сюда</h3>
                </div>
                <div class="addForm">
                    <label for='file'>
                        <input type="file" id="file" name="file" @change="getTemplate($event)">
                    </label>
                    <img src="images\Cloud.svg" alt="Cloud">
                    <p>Выберите файл или перетащите <br>его сюда</p>
                    <p>(макс размер 16 мб)</p>
                </div>
                <p>или</p>
                <div class="addPhotoEnd">
                    <h3>Выбрать один из наших шаблонов</h3>
                </div>
            </div>
            <div class="pickTemplateContainer">
                <div class="pickTemplate" id="pickTemplate">
                    <p>Сортировать по праздникам</p>
                    <ul>
                        <li class="pickTemplate__item">Новый год</li>
                        <li class="pickTemplate__item">День рождения</li>
                        <li class="pickTemplate__item">8 марта</li>
                        <li class="pickTemplate__item">29 февраля</li>
                        <li class="pickTemplate__item">открыть весь список...</li>
                    </ul>
                    <div class="Templates">
                        <div class="template-item">
                            <img src="images\Tempates\New Year_1.png" alt="Новогодняя картинка - 1">
                        </div>
                        <div class="template-item">
                            <img src="images\Tempates\New Year_2.png" alt="Новогодняя картинка - 2">
                        </div>
                        <div class="template-item">
                            <img src="images\Tempates\New Year_3.png" alt="Новогодняя картинка - 3">
                        </div>
                        <div class="template-item">
                            <img src="images\Tempates\New Year_4.png" alt="Новогодняя картинка - 4">
                        </div>
                        <div class="template-item">
                            <img src="images\Tempates\New Year_5.png" alt="Новогодняя картинка - 5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import paginator from './paginator'
export default {
    data() {
        return{
            input1: '',
            input2: '',
        }
    },
    components: {
        paginator
    },
    methods: {
        getTemplate (event) {
            const reader = new FileReader();
            reader.onload = () => {
                this.$store.dispatch('ADD_TEMPLATE', reader.result) ;
            }
            reader.readAsDataURL(event.target.files[0]);
            this.$router.push('editor')
        }
    }
}
</script>

