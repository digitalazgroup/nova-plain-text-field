<template>
    <default-field :field="field">
        <template slot="field">
             <input
                :id="field.attribute"
                :dusk="field.attribute"
                :type="text"
                v-model="value"
                class="w-full form-control form-plain-text text-80 h-9 pt-2 ml-3"
                readonly
            />
        </template>
    </default-field>
</template>

<script>
import { FormField } from 'laravel-nova';

export default {
  mixins: [FormField]
};
</script>
