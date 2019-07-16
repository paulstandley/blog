import React, { Component } from 'react';

export default class FormCreate extends Component {

    render() {
        return (
            <div className="form-group">
              <input className="fom-control" type="text" name="title" placeholder="Title"/>
              <textarea className="fom-control" type="textarea" name="body"placeholder="Body"/>
              <input className="fom-control" type="submit" name="create-post" id="createPost"/>
            </div>
        );
    }
}