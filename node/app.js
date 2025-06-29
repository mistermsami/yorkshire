import knex from 'knex';

const connection = knex({
  client: 'mysql2',
  connection: {
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'u820797619_yorkshire'
  }
});

export default connection;
