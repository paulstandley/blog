import React, { Component } from 'react';

export default class FormCreate extends Component {

    render() {
        return (
            <div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Title</label>
              <input type="text" class="form-control" id="title" placeholder="Title"/>
            </div>
            <div class="form-group">      
              <label for="textarea">Blog</label>
              <textarea class="form-control" id="textarea" rows="19" placeholder="Blog"></textarea>
            </div>
            <input type="submit" className="btn btn-primary"/>
            </div>
        );
    }
}