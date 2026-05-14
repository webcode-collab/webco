#!/usr/bin/env python3
import sqlite3
from pathlib import Path

path = Path('database/database.sqlite')
print('exists', path.exists())
if path.exists():
    conn = sqlite3.connect(path)
    cur = conn.cursor()
    try:
        cur.execute('SELECT count(*) FROM users')
        print('count', cur.fetchone()[0])
        cur.execute('SELECT email, password FROM users LIMIT 5')
        rows = cur.fetchall()
        for row in rows:
            print(row)
    except Exception as e:
        print('error', e)
    finally:
        conn.close()
