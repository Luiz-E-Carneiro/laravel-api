import React, { useEffect, useState } from "react";
import api from "./api";

function App() {
  const [items, setItems] = useState([]);
  const [form, setForm] = useState({ title: "", desc: "" });

  const fetchItems = async () => {
    const res = await api.get("/items");
    setItems(res.data);
  };

  useEffect(() => {
    fetchItems();
  }, []);

  const handleSubmit = async (e) => {
    e.preventDefault();
    if (!form.title.trim()) return;

    await api.post("/items", form);
    setForm({ title: "", desc: "" });
    fetchItems();
  };

  return (
    <div style={{ width: "500px", padding:'10px'}}>
      <div style={{ backdropFilter: "blur(10px)", borderRadius: "10px", backgroundColor: "darkblue", padding: '10px'}}>

        <h2>Items</h2>

        <form onSubmit={handleSubmit}>
          <input
            type="text"
            placeholder="title"
            value={form.title}
            onChange={(e) => setForm({ ...form, title: e.target.value })}
          />
          <input
            type="text"
            placeholder="desc"
            value={form.desc}
            onChange={(e) => setForm({ ...form, desc: e.target.value })}
          />
          <button type="submit">Add</button>
        </form>

        <ul>
          {items.map((item) => (
            <li key={item.id}>
              <strong>{item.title}</strong> — {item.desc}
            </li>
          ))}
        </ul>
      </div>
    </div>
  );
}

export default App;