<template>
    <div class="page-container">
        <md-app>
            <md-app-toolbar class="md-primary" md-elevation="0">
                <div class="md-toolbar-row">

                <md-button class="md-icon-button" @click="toggleMenu" v-if="!menuVisible">
                <md-icon>menu</md-icon>
            </md-button>
            <span class="md-title">Gemini DashBoard</span>
            <div class="md-toolbar-section-end">
                <md-button class="md-icon-button">
                    <md-icon>more_vert</md-icon>
                </md-button>
            </div>
              </div>
            <div class="md-toolbar-row">
                <md-tabs class="md-primary">
                    <md-tab id="tab-published" md-label="Published"></md-tab>
                    <md-tab id="tab-draft" md-label="Draft"></md-tab>
                    <md-tab id="tab-scheduled" md-label="Scheduled"></md-tab>
                    <md-tab id="tab-trash" md-label="Trash"></md-tab>
                </md-tabs>
            </div>
        </md-app-toolbar>

        <md-app-drawer :md-active.sync="menuVisible" md-persistent="mini">
        <md-toolbar class="md-transparent" md-elevation="0">
            <span>Navigation</span>

            <div class="md-toolbar-section-end">
                <md-button class="md-icon-button md-dense" @click="toggleMenu">
                <md-icon>keyboard_arrow_left</md-icon>
            </md-button>
    </div>
</md-toolbar>

<md-list>
    <md-list-item>
        <md-icon>pages</md-icon>
        <span class="md-list-item-text">Pages</span>
    </md-list-item>

    <md-list-item>
        <md-icon>post_add</md-icon>
        <span class="md-list-item-text">Posts</span>
    </md-list-item>

    <md-list-item>
        <md-icon>category</md-icon>
        <span class="md-list-item-text">Categories</span>
    </md-list-item>

    <md-list-item>
        <md-icon>perm_media</md-icon>
        <span class="md-list-item-text">Medias</span>
    </md-list-item>
    <md-list-item>
        <md-icon>library_add</md-icon>
        <span class="md-list-item-text">Blocks</span>
    </md-list-item>
    <md-list-item>
        <md-icon>table_chart</md-icon>
        <span class="md-list-item-text">Layouts</span>
    </md-list-item>
    <md-list-item>
        <md-icon>settings_applications</md-icon>
        <span class="md-list-item-text">Settings</span>
    </md-list-item>



</md-list>
</md-app-drawer>

<md-app-content>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quibusdam, non molestias et! Earum magnam, similique, quo recusandae placeat dicta asperiores modi sint ea.
    Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.

    Почему он используется?
    Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).


    Откуда он появился?
    Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в разделе 1.10.32

    Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 "de Finibus Bonorum et Malorum" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.

    Где его взять?
    Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или "невозможных" слов.

</md-app-content>
</md-app>
</div>
</template>

<script>
    export default {
    name: 'AppFSection',
    data: () => ({
    menuVisible: false
}),
    methods: {
    toggleMenu () {
    this.menuVisible = !this.menuVisible
}
},

    mounted() {
    console.log('Component mounted.')
}
}
</script>

<style lang="scss" scoped>
    .md-app {
    min-height: 350px;
    border: 1px solid rgba(#000, .12);
}

    // Demo purposes only
    .md-drawer {
    width: 230px;
    max-width: calc(100vw - 125px);
}
</style>
