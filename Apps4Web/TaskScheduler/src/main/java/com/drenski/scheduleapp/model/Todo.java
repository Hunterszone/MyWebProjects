package com.drenski.scheduleapp.model;

import javax.validation.constraints.NotNull;
import javax.validation.constraints.Size;
import java.util.Date;

public class Todo {

    private int id;
    private String user;
    private Date targetDate;
    private boolean isDone;

    @NotNull(message = "Empty task not allowed!")
    @Size(min=5, message="Enter at least 5 characters!")
    private String task;

    public Todo() {
    		super();
    }
    
    public Todo(int id, String user, String task, Date targetDate,
                boolean isDone) {
        super();
        this.id = id;
        this.user = user;
        this.task = task;
        this.targetDate = targetDate;
        this.isDone = isDone;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getUser() {
        return user;
    }

    public void setUser(String user) {
        this.user = user;
    }

    public String getTask() {
        return task;
    }

    public void setTask(String task) {
        this.task = task;
    }

    public Date getTargetDate() {
        return targetDate;
    }

    public void setTargetDate(Date targetDate) {
        this.targetDate = targetDate;
    }

    public boolean getDone() {
        return isDone;
    }

    public void setDone(boolean isDone) {
        this.isDone = isDone;
    }

    @Override
    public int hashCode() {
        final int prime = 31;
        int result = 1;
        result = prime * result + id;
        return result;
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        Todo other = (Todo) obj;
        if (id != other.id) {
            return false;
        }
        return true;
    }

    public String[] getUserAndDesc(Todo todo) {
        return new String[]{todo.getUser(), todo.getTask()};
    }

    @Override
    public String toString() {
        return String.format(
                "Todo [id=%s, user=%s, task=%s, targetDate=%s, getDone=%s]", id,
                user, task, targetDate, isDone);
    }
}