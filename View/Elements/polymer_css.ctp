<style is="custom-style">
:root {
    /*
    * You can use these generic variables in your elements for easy theming.
    * For example, if all your elements use `--primary-text-color` as its main
    * color, then switching from a light to a dark theme is just a matter of
    * changing the value of `--primary-text-color` in your application.
    */
    --primary-text-color: var(--light-theme-text-color);
    --primary-background-color: var(--light-theme-background-color);
    --secondary-text-color: var(--light-theme-secondary-color);
    --disabled-text-color: var(--light-theme-disabled-color);
    --divider-color: var(--light-theme-divider-color);
    --error-color: var(--paper-deep-orange-a700);
    /*
    * Primary and accent colors. Also see color.html for more colors.
    */
    --primary-color: var(--paper-indigo-500);
    --light-primary-color: var(--paper-indigo-100);
    --dark-primary-color: var(--paper-indigo-700);
    --accent-color: var(--paper-pink-a200);
    --light-accent-color: var(--paper-pink-a100);
    --dark-accent-color: var(--paper-pink-a400);
    /*
    * Material Design Light background theme
    */
    --light-theme-background-color: #ffffff;
    --light-theme-base-color: #000000;
    --light-theme-text-color: var(--paper-grey-900);
    --light-theme-secondary-color: #737373;  /* for secondary text and icons */
    --light-theme-disabled-color: #9b9b9b;  /* disabled/hint text */
    --light-theme-divider-color: #dbdbdb;
    /*
    * Material Design Dark background theme
    */
    --dark-theme-background-color: var(--paper-grey-900);
    --dark-theme-base-color: #ffffff;
    --dark-theme-text-color: #ffffff;
    --dark-theme-secondary-color: #bcbcbc;  /* for secondary text and icons */
    --dark-theme-disabled-color: #646464;  /* disabled/hint text */
    --dark-theme-divider-color: #3c3c3c;
    /*
    * Deprecated values because of their confusing names.
    */
    --text-primary-color: var(--dark-theme-text-color);
    --default-primary-color: var(--primary-color);

    font-family: 'Roboto', Helvica, sans-serif;
    background-color: var(--light-theme-divider-color);
}

app-toolbar {
    background-color: var(--primary-color);
    color: var(--dark-theme-text-color);
    --app-toolbar-font-size: 24px;
}

app-drawer {
    --app-drawer-content-container: {
        background-color: var(--light-primary-color);
        color: var(--light-theme-text-color);
    }
}

paper-menu#menu {
    --paper-menu-background-color: var(--light-primary-color);
    color: var(--light-theme-text-color);
}

paper-menu#menu paper-item {
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.content-block {
    background-color: var(--light-theme-background-color);
    margin: 16px;
    padding: 8px;
}

task-list {
    margin-left: 16px;
    margin-right: 16px;
}

/* mobile-large */
@media all and (min-width: 361px) and (orientation: portrait) {
    .content-block {
        margin: 24px;
    }

    task-list {
        margin-left: 24px;
        margin-right: 24px;
    }
}

/* mobile-large-landscape */
@media all and (min-width: 481px) and (orientation: landscape) {
    .content-block {
        margin: 24px;
    }

    task-list {
        margin-left: 24px;
        margin-right: 24px;
    }
}
</style>
