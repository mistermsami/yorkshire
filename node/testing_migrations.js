// create-table.js or any other module
import connection from './app.js';

connection.schema.createTable('posts', table => {
  table.increments();
  table.string('title');
}).then(() => console.log("Posts table created"));
