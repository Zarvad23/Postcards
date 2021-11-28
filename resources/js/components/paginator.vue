<template>
    <div class="paginator">
        <router-link to="/"><a class="pageMainPaginator">Главная</a></router-link> > {{ name }}
    </div>
</template>
<script>
export default {
    name: 'paginator',
    props:['name']
}
</script>