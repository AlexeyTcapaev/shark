<template>
  <v-container fluid>
    <v-layout justify-center align-center>
      <v-flex>
        <v-data-table
          v-model="selected"
          :headers="headers"
          :items="aggregators"
          class="elevation-1"
          :loading="true"
          select-all
          item-key="name"
        >
          <v-progress-linear slot="progress" color="secondary" indeterminate></v-progress-linear>
          <template slot="no-data">
            <v-alert
              :value="emptyTable"
              color="error"
              icon="warning"
            >Sorry, nothing to display here :(</v-alert>
          </template>
          <template slot="headers" slot-scope="props">
            <tr>
              <th>
                <v-checkbox
                  :input-value="props.all"
                  :indeterminate="props.indeterminate"
                  primary
                  hide-details
                  @click.native="toggleAll"
                ></v-checkbox>
              </th>
              <th
                v-for="header in props.headers"
                :key="header.text"
                :class="['column sortable', pagination.descending ? 'desc' : 'asc', header.value === pagination.sortBy ? 'active' : '']"
                @click="changeSort(header.value)"
              >
                <v-icon small>arrow_upward</v-icon>
                {{ header.text }}
              </th>
            </tr>
          </template>
          <template slot="items" slot-scope="props">
            <tr
              :active="props.selected"
              @click="props.selected = !props.selected"
              @contextmenu="show"
            >
              <td class="text-xs-center">
                <v-checkbox v-model="props.selected" primary hide-details></v-checkbox>
              </td>
              <td class="text-xs-center">{{ props.item.id }}</td>
              <td class="text-xs-center">{{ props.item.name }}</td>
              <td class="text-xs-center">{{ props.item.abbr }}</td>
              <td class="text-xs-center">{{ props.item.manager }}</td>
              <td class="text-xs-center">{{ props.item.priority }}</td>
              <td class="text-xs-center">{{ props.item.contract }}</td>
              <td class="text-xs-center">{{ props.item.foreignAgregator }}</td>
              <td class="text-xs-center">{{ props.item.coefficient }}</td>
              <td class="text-xs-center">{{ props.item.calculation }}</td>
            </tr>
          </template>
        </v-data-table>
        <v-menu v-model="showMenu" :position-x="x" :position-y="y" absolute offset-y>
          <v-list>
            <v-list-tile v-for="(item, index) in items" :key="index" @click>
              <v-list-tile-title>{{ item.title }}</v-list-tile-title>
            </v-list-tile>
          </v-list>
        </v-menu>
      </v-flex>
    </v-layout>
  </v-container>
</template>
<script>
export default {
  data: () => ({
    showMenu: false,
    x: 0,
    y: 0,
    items: [
      { title: "Click Me" },
      { title: "Click Me" },
      { title: "Click Me" },
      { title: "Click Me 2" }
    ],
    pagination: {
      sortBy: "name"
    },
    selected: [],
    headers: [
      { text: "ID", value: "id", align: "left" },
      { text: "Название", value: "name", align: "left" },
      { text: "Аббревиатура", value: "abbr", align: "left" },
      { text: "Менеджер", value: "manager", align: "left" },
      { text: "Приоритет", value: "priority", align: "left" },
      { text: "Договор", value: "contract", align: "left" },
      {
        text: "Зарубежный агрегатор",
        value: "foreignAgregator",
        align: "left"
      },
      { text: "Коэффициент", value: "coefficient", align: "left" },
      { text: "Рассчёт", value: "calculation", align: "left" }
    ],
    aggregators: [
      {
        id: 1,
        name: "Admitad",
        abbr: "AD",
        manager: "!апк",
        priority: 5,
        contract: true,
        foreignAgregator: false,
        coefficient: 1.0,
        calculation: "Базовый"
      }
    ],
    emptyTable: true
  }),
  methods: {
    toggleAll() {
      this.selected =
        this.selected.length === this.aggregators.length
          ? []
          : this.aggregators;
    },
    show(e) {
      e.preventDefault();
      this.showMenu = false;
      this.x = e.clientX;
      this.y = e.clientY;
      this.$nextTick(() => {
        this.showMenu = true;
      });
    },
    changeSort(column) {
      if (this.pagination.sortBy === column) {
        this.pagination.descending = !this.pagination.descending;
      } else {
        this.pagination.sortBy = column;
        this.pagination.descending = false;
      }
    }
  },
  mounted() {
    console.log(this.aggregators.slice());
  }
};
</script>
