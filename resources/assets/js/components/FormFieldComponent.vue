<template>

    <input type="{field.type}"
        id="{field.id}"
        name="{field.name}"
        v-validate.initial="'{field.rules}'"
        :class="{'form-control': true, 'has-error': errors.has({field.name}) }"
        placeholder="{field.placeholder}"
        title="{field.title}" />

    <div v-show="errors.has({field.name})" class="help is-danger">@{{ errors.first({field.name}) }}</div>

</template>
